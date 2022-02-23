<?php

namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        $row = array();

        $count_array = array_count_values(self::products);

        $row['preto']['PP'] = $count_array['preto-PP'];
        $row['preto']['M'] = $count_array['preto-M'];
        $row['preto']['G'] = $count_array['preto-G'];
        $row['preto']['GG'] = $count_array['preto-GG'];
        $row['branco']['PP'] = $count_array['branco-PP'];
        $row['branco']['G'] = $count_array['branco-G'];
        $row['vermelho']['M'] = $count_array['vermelho-M'];
        $row['azul']['XG'] = $count_array['azul-XG'];
        $row['azul']['P'] = $count_array['azul-P'];

        //todo your code.
        return $row;
    }
}
