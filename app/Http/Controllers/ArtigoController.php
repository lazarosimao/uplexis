<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Artigos;
use Illuminate\Support\Facades\Auth;

class ArtigoController extends Controller
{
    public function index()
    {
        $artigos = Artigos::with('usuario')
                        ->orderBy('id', 'desc')
                        ->get();
        return view('artigos',['artigos' => $artigos]);
    }

    public function telaBusca()
    {
        return view('busca-artigos');
    }

    public function buscar(Request $request)
    {
        $busca = $request->all();
        $url = "https://www.uplexis.com.br/blog/?s=".$busca['busca'];
        $output = file_get_contents($url);
        $gravou = 0;

        if ($output) {
            $dom = new \domDocument('1.0', 'utf-8');
            @$dom->loadHTML($output);
            $dom->preserveWhiteSpace = false;
            $xpath = new \DOMXPath($dom);

            $elemento = $xpath->query('//div[@class="col-12 post"]');
            $count = $elemento->length;

            for ($i = 0; $i < $count; $i++) {
                $div = $xpath->query('//div[@class="col-12 post"]')->item($i);
                @$dom->loadHTML($div);
                $dom->preserveWhiteSpace = false;
                $xpath = new \DOMXPath($dom);

                $div_titulo = $xpath->query('//div[@class="title"]')->item($i);
                $div_link = $xpath->query('//div[@class="wrap-button"] //a/@href')->item($i);
                $titulo = trim($div_titulo->nodeValue);
                $link = trim($div_link->nodeValue);

                $artigo = new Artigos();
                $artigo->id_usuario = Auth::user()->id;
                $artigo->titulo = $titulo;
                $artigo->link = $link;
                $artigo->save();

                $gravou = 1;
            }
        }

        return json_encode( $gravou);
    }
}
