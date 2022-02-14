<?php

$berita = [
    [
        "Kategori" => "Olahraga",
        "Judul" => "Persib Bandung malam ini Bertanding",
        "Artikel" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, pariatur tempore sint sunt id perferendis fugit doloremque laboriosam ad nesciunt atque, minus aliquid blanditiis eveniet dolores magni natus quos quod quia tenetur commodi, repellendus corporis temporibus ducimus. Explicabo expedita ipsa deserunt tempora modi autem repellendus deleniti rem, doloribus repudiandae dolor sapiente laborum eos. Deserunt quo totam eveniet doloribus libero natus voluptates quaerat iure facere, enim est eos ad unde ipsa minus amet consequuntur in cumque. Ut non numquam repudiandae libero quo odit labore dolor, cupiditate maiores, nam sit magnam nisi explicabo saepe. Ad architecto neque corporis aliquam a nam praesentium!",
        "Tanggal" => "12 Februari 2022",
    ],
    [
        "Kategori" => "Kesehatan",
        "Judul" => "Corona Melonjak Naik",
        "Artikel" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, pariatur tempore sint sunt id perferendis fugit doloremque laboriosam ad nesciunt atque, minus aliquid blanditiis eveniet dolores magni natus quos quod quia tenetur commodi, repellendus corporis temporibus ducimus. Explicabo expedita ipsa deserunt tempora modi autem repellendus deleniti rem, doloribus repudiandae dolor sapiente laborum eos. Deserunt quo totam eveniet doloribus libero natus voluptates quaerat iure facere, enim est eos ad unde ipsa minus amet consequuntur in cumque. Ut non numquam repudiandae libero quo odit labore dolor, cupiditate maiores, nam sit magnam nisi explicabo saepe. Ad architecto neque corporis aliquam a nam praesentium!",
        "Tanggal" => "18 Februari 2022",
    ],
    [
        "Kategori" => "Teknologi",
        "Judul" => "Oppo keluarkan HP dengan spek Gaming",
        "Artikel" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, pariatur tempore sint sunt id perferendis fugit doloremque laboriosam ad nesciunt atque, minus aliquid blanditiis eveniet dolores magni natus quos quod quia tenetur commodi, repellendus corporis temporibus ducimus. Explicabo expedita ipsa deserunt tempora modi autem repellendus deleniti rem, doloribus repudiandae dolor sapiente laborum eos. Deserunt quo totam eveniet doloribus libero natus voluptates quaerat iure facere, enim est eos ad unde ipsa minus amet consequuntur in cumque. Ut non numquam repudiandae libero quo odit labore dolor, cupiditate maiores, nam sit magnam nisi explicabo saepe. Ad architecto neque corporis aliquam a nam praesentium!",
        "Tanggal" => "20 Januari 2022",
    ],
    [
        "Kategori" => "Travel",
        "Judul" => "Tempat Liburan menarik di Bandung",
        "Artikel" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, pariatur tempore sint sunt id perferendis fugit doloremque laboriosam ad nesciunt atque, minus aliquid blanditiis eveniet dolores magni natus quos quod quia tenetur commodi, repellendus corporis temporibus ducimus. Explicabo expedita ipsa deserunt tempora modi autem repellendus deleniti rem, doloribus repudiandae dolor sapiente laborum eos. Deserunt quo totam eveniet doloribus libero natus voluptates quaerat iure facere, enim est eos ad unde ipsa minus amet consequuntur in cumque. Ut non numquam repudiandae libero quo odit labore dolor, cupiditate maiores, nam sit magnam nisi explicabo saepe. Ad architecto neque corporis aliquam a nam praesentium!",
        "Tanggal" => "1 Februari 2022",
    ],
    [
        "Kategori" => "Otomotif",
        "Judul" => "Yamaha produksi motor baru dengan tenaga 200cc",
        "Artikel" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, pariatur tempore sint sunt id perferendis fugit doloremque laboriosam ad nesciunt atque, minus aliquid blanditiis eveniet dolores magni natus quos quod quia tenetur commodi, repellendus corporis temporibus ducimus. Explicabo expedita ipsa deserunt tempora modi autem repellendus deleniti rem, doloribus repudiandae dolor sapiente laborum eos. Deserunt quo totam eveniet doloribus libero natus voluptates quaerat iure facere, enim est eos ad unde ipsa minus amet consequuntur in cumque. Ut non numquam repudiandae libero quo odit labore dolor, cupiditate maiores, nam sit magnam nisi explicabo saepe. Ad architecto neque corporis aliquam a nam praesentium!",
        "Tanggal" => "30 Januari 2022",
    ],
];

foreach ($berita as $artikel) {
    echo "<p>Kategori : " . $artikel['Kategori'] . "</p>";
    echo "<p>Tanggal : " . $artikel['Tanggal'] . "</p>";
    echo "<h1>" . $artikel['Judul'] . "</h1>";
    echo "<p>" . $artikel['Artikel'] . "</p><hr>";
}

// for ($a = 0; $a < count($berita); $a++) {
//     echo "<p>Kategori : " . $berita[$a]['Kategori'] . "</p>";
//     echo "<p>Tanggal : " . $berita[$a]['Tanggal'] . "</p>";
//     echo "<h1>" . $berita[$a]['Judul'] . "</h1>";
//     echo "<p>" . $berita[$a]['Artikel'] . "</p><hr>";
// }