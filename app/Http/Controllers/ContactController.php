<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Process the contact form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi input form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birth_info' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'message' => 'required|string',
        ]);

        // Proses data form (bisa disimpan ke database atau dikirim via email)
        // Simpan data ke Google Sheets
        try {
            $client = new \Google_Client();
            $client->setAuthConfig(storage_path('app/credentials.json'));
            $client->addScope(\Google_Service_Sheets::SPREADSHEETS);
            
            $service = new \Google_Service_Sheets($client);
            $spreadsheetId = env('GOOGLE_SHEET_ID');
            
            $values = [
                [
                    date('Y-m-d H:i:s'),
                    $validated['name'],
                    $validated['birth_info'],
                    $validated['address'],
                    $validated['phone'],
                    $validated['email'] ?? '',
                    $validated['message']
                ]
            ];
            
            $body = new \Google_Service_Sheets_ValueRange([
                'values' => $values
            ]);
            
            $params = [
                'valueInputOption' => 'RAW'
            ];
            
            $service->spreadsheets_values->append(
                $spreadsheetId,
                'Sheet1!A1:G1',
                $body,
                $params
            );
            
            \Log::info('Data kontak berhasil disimpan ke Google Sheets:', $validated);
        } catch (\Exception $e) {
            \Log::error('Gagal menyimpan ke Google Sheets: ' . $e->getMessage());
            return redirect()->route('contact')->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }

        // Redirect dengan pesan sukses
        return redirect()->route('contact')->with('success', 'Pendaftaran Anda telah berhasil dikirim!');
    }
}
