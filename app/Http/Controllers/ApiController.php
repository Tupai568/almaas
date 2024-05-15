<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class ApiController extends Controller
{

    public function ApiData()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://al-quran-8d642.firebaseio.com/data.json?print=pretty');
        $data = json_decode($response->getBody()->getContents(), true);
        return view('Quran', [
            "title" => "Al-Quran | Bersama Almaas",
            "data" => $data
        ]);
    }

    public function GetApiData($surat)
    {

        $client = new Client();
        try {
            $response = $client->request('GET', 'https://api.npoint.io/99c279bb173a6e28359c/surat/'.$surat);

            // Menangkap response dari API eksternal
            $responseData = json_decode($response->getBody()->getContents(), true);

            return view('Quran', [
                "title" => "Al-Quran | Bersama Almaas",
                "surat" => $responseData
            ]);
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            // Tangani error yang mungkin terjadi saat request ke API
            return view('Quran', [
                "not" => 'Data Tidak Ditemukan'
            ]);
        }

    }
}
