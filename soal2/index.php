<?php

$provinsi = [
    'Jatim' => [
        'Surabaya' => [
            'Jambangan', 'Wonokromo'
        ],
        'Sidoarjo' => [
            'Taman', 'Waru'
        ]
    ],
    'Jateng' => [
        'Semarang' => [
            'Kecamatan 1', 'Kecamatan 2'
        ],
        'Solo' => [
            'Kecamatan 1', 'Kecamatan 2'
        ]
    ]
];


$test = array(
    'jatim' => array('surabaya' => array('jambangan', 'wonokromo'), 'sidoarjo' => array('taman', 'waru')),
    'jateng' => array('semarang' => array('kecamatan 1', 'kecamatan 2'), 'solo' => array('kecamatan 1', 'kecamatan 2')),
);

?>
<style>
    table,
    tr,
    th,
    td {
        border: 1px solid;
    }
</style>
<table>
    <tr>
        <th>provinsi</th>
        <th>kabupaten</th>
        <th>kecamatan</th>
    </tr>

    <?php

    foreach ($test as $key => $val) {
    ?><tr>
            <td><?php echo $key; ?></td>
            <td><?php
                foreach ($val as $k => $v) {
                    print_r($k . " ");
                }
                ?>
            </td>
            <td></td>
        </tr>
    <?php } ?>
</table>