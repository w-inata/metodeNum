<?= $this->extend('layouts/base'); ?>
<?= $this->section('content'); ?>
<?php
    use App\Helpers\main
?>
<div class="">
    <div class="bg-gray-50 overflow-auto shadow">
        <table class="text-left w-full border-collapse">
            <thead class="bg-sidebar text-black text-center">
                <tr>
                    <th rowspan="2" class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Nilai
                    </th>
                    <th rowspan="2" class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Frekuensi
                    </th>
                    <th colspan="2" class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Batas Kelas
                    </th>
                    <th colspan="2" class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Nilai Z
                    </th>
                    <th colspan="2" class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Z Table
                    </th>
                    <th rowspan="2" class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Proporsi
                    </th>
                    <th rowspan="2" class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        fe
                    </th>
                    <th rowspan="2" class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Chi<br>Kuadrat
                    </th>
                </tr>
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Atas
                    </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Bawah
                    </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Atas
                    </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Bawah
                    </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Atas
                    </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Bawah
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $chiKuadratKumulatif = 0; ?>
                <?php foreach ($bergolongtabel as $item) : ?>
                    <tr class="hover:bg-grey-lighter text-center">
                        <td class="py-4 px-6 border-b border-grey-light"><?= $item['key']  -  $item['keyLast']  ?></td>
                        <td class="py-4 px-6 border-b border-grey-light"><?= $item['value']  ?></td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <?= $bBawah = $item['key'] - 0.5 ?>
                            <?=
                            $bBawah
                            ?>

                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <?= $bAtas = $item['keyLast'] + 0.5 ?>
                            <?=
                            $bAtas
                            ?>
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">

                            <?= $zScoreDown = round((($bBawah) - $avg) / $sb, 3, PHP_ROUND_HALF_DOWN)?>
                            <?= $zScoreDown; ?>
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <?= $zScoreUp = round((($bAtas) - $avg) / $sb, 3, PHP_ROUND_HALF_DOWN) ?>
                            <?= $zScoreUp; ?> 
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <?= $zTableDown = Main::getZScoreProbability($zScoreDown) ?>
                            <?= $zTableDown; ?>
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <?= $zTableUp = Main::getZScoreProbability($zScoreUp) ?>
                            <?= $zTableUp; ?>
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <?= $proporsi = abs($zTableDown - $zTableUp) ?>
                            <?= $proporsi; ?>
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <?= $freqEkpetasi = $proporsi * $jmlData ?>
                            <?= $freqEkpetasi; ?>
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <?= $chiKuadrat =
                                (($item['value'] - $freqEkpetasi) * ($item['value'] - $freqEkpetasi)) / $freqEkpetasi;
                            $chiKuadratKumulatif += $chiKuadrat;
                            ?>
                            <?= round($chiKuadrat, 6); ?>
                            
                        </td>
                    </tr>

                <?php endforeach ?>


            </tbody>
        </table>
    </div>
</div>

<div class="w-full py-3 px-6 mt-3 bg-gray-50 shadow">
    <p class="font-bold float-left">
        Nilai Total Chi Kuadrat
    </p>
    <p class="font-bold float-right">
        <?= round($chiKuadratKumulatif, 6); ?>
        
    </p>
    <div class="clear-both"></div>
</div>


<?= $this->endSection(); ?>