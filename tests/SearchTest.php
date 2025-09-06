<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use Gabriel\DigitalCep\Search;

// ! ==================================================
// * Para rodar o teste:
// * vendor/bin/phpunit tests/[Arquivo] --colors=always 
// ! ==================================================


class SearchTest extends TestCase {
    #[Test]
    #[DataProvider('dadosTeste')]
    public function testGetAdressFromZipcodeDefaultUsage(string $input, array $esperado) {
        
        $resultado = new Search();
        $resultado = $resultado->getAdressFromZipcode($input);
        
        $this->assertEquals($esperado, $resultado);
    }

    public static function dadosTeste(): array
    {
        return [
            "Endereço Praça da Sé" => [
                "01001000", 
                [ 
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "unidade" => "",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "estado" => "São Paulo",
                    "regiao" => "Sudeste",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ],
            "Endereço Itapoã Parque" => [
                "71592056", 
                [ 
                    "cep" => "71592-056",
                    "logradouro" => "Quadra 501 Conjunto 1",
                    "complemento" => "",
                    "unidade" => "",
                    "bairro" => "Itapoã Parque (Itapoã)",
                    "localidade" => "Brasília",
                    "uf" => "DF",
                    "estado" => "Distrito Federal",
                    "regiao" => "Centro-Oeste",
                    "ibge" => "5300108",
                    "gia" => "",
                    "ddd" => "61",
                    "siafi" => "9701"
                ]
            ]
        ];
    }
}