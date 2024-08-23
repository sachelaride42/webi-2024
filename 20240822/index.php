<?php
$notices = [
    [
        'id' => 1,
        'title' => 'Descoberta Científica Revolucionária',
        'resume' => 'Cientistas descobriram uma nova forma de gerar energia limpa e sustentável.',
        'content' => 'Cientistas descobriram uma nova forma de gerar energia limpa e sustentável. A nova tecnologia utiliza materiais inovadores que prometem reduzir o custo e o impacto ambiental da produção de energia.',
        'image' => 'https://www.ambientelegal.com.br/wp-content/uploads/energia_renovavel00-350x250.jpg'
    ],
    [
        'id' => 2,
        'title' => 'Novo Avanço na Tecnologia de Inteligência Artificial',
        'resume' => 'Uma nova técnica em IA promete transformar a maneira como interagimos com a tecnologia.',
        'content' => 'Uma nova técnica em Inteligência Artificial foi desenvolvida, permitindo que sistemas aprendam e se adaptem de forma mais eficiente. Isso pode levar a avanços significativos na automação e na interação homem-máquina.',
        'image' => 'https://www.ambientelegal.com.br/wp-content/uploads/energia_renovavel00-350x250.jpg'
    ],
    [
        'id' => 3,
        'title' => 'Inovações no Setor de Energia Renovável',
        'resume' => 'Novos investimentos estão trazendo avanços significativos na geração de energia renovável.',
        'content' => 'Recentes investimentos no setor de energia renovável estão promovendo avanços tecnológicos importantes, como painéis solares mais eficientes e turbinas eólicas mais poderosas, o que pode acelerar a transição para fontes de energia mais sustentáveis.',
        'image' => 'https://www.ambientelegal.com.br/wp-content/uploads/energia_renovavel00-350x250.jpg'
    ],
    [
        'id' => 4,
        'title' => 'Descoberta Científica Revolucionária',
        'resume' => 'Cientistas descobriram uma nova forma de gerar energia limpa e sustentável.',
        'content' => 'Cientistas descobriram uma nova forma de gerar energia limpa e sustentável. A nova tecnologia utiliza materiais inovadores que prometem reduzir o custo e o impacto ambiental da produção de energia.',
        'image' => 'https://www.ambientelegal.com.br/wp-content/uploads/energia_renovavel00-350x250.jpg'
    ],
    [
        'id' => 5,
        'title' => 'Novo Avanço na Tecnologia de Inteligência Artificial',
        'resume' => 'Uma nova técnica em IA promete transformar a maneira como interagimos com a tecnologia.',
        'content' => 'Uma nova técnica em Inteligência Artificial foi desenvolvida, permitindo que sistemas aprendam e se adaptem de forma mais eficiente. Isso pode levar a avanços significativos na automação e na interação homem-máquina.',
        'image' => 'https://www.ambientelegal.com.br/wp-content/uploads/energia_renovavel00-350x250.jpg'
    ],
    [
        'id' => 6,
        'title' => 'Inovações no Setor de Energia Renovável',
        'resume' => 'Novos investimentos estão trazendo avanços significativos na geração de energia renovável.',
        'content' => 'Recentes investimentos no setor de energia renovável estão promovendo avanços tecnológicos importantes, como painéis solares mais eficientes e turbinas eólicas mais poderosas, o que pode acelerar a transição para fontes de energia mais sustentáveis.',
        'image' => 'https://www.ambientelegal.com.br/wp-content/uploads/energia_renovavel00-350x250.jpg'
    ],
    [
        'id' => 7,
        'title' => 'Descoberta Científica Revolucionária',
        'resume' => 'Cientistas descobriram uma nova forma de gerar energia limpa e sustentável.',
        'content' => 'Cientistas descobriram uma nova forma de gerar energia limpa e sustentável. A nova tecnologia utiliza materiais inovadores que prometem reduzir o custo e o impacto ambiental da produção de energia.',
        'image' => 'https://www.ambientelegal.com.br/wp-content/uploads/energia_renovavel00-350x250.jpg'
    ],
    [
        'id' => 8,
        'title' => 'Novo Avanço na Tecnologia de Inteligência Artificial',
        'resume' => 'Uma nova técnica em IA promete transformar a maneira como interagimos com a tecnologia.',
        'content' => 'Uma nova técnica em Inteligência Artificial foi desenvolvida, permitindo que sistemas aprendam e se adaptem de forma mais eficiente. Isso pode levar a avanços significativos na automação e na interação homem-máquina.',
        'image' => 'https://www.ambientelegal.com.br/wp-content/uploads/energia_renovavel00-350x250.jpg'
    ],
    [
        'id' => 9,
        'title' => 'Inovações no Setor de Energia Renovável',
        'resume' => 'Novos investimentos estão trazendo avanços significativos na geração de energia renovável.',
        'content' => 'Recentes investimentos no setor de energia renovável estão promovendo avanços tecnológicos importantes, como painéis solares mais eficientes e turbinas eólicas mais poderosas, o que pode acelerar a transição para fontes de energia mais sustentáveis.',
        'image' => 'https://www.ambientelegal.com.br/wp-content/uploads/energia_renovavel00-350x250.jpg'
    ]
];

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
    if ($id) {
        $has_key = false;
        foreach ($notices as $key => $value) {
            if ($value['id'] == $id)
                $has_key = $value;
        }
        if ($has_key) {
            $_REQUEST['notice'] = $has_key;
        } 
    } else {
        $_REQUEST['notices'] = $notices;
    }
    include_once('all.php');
}