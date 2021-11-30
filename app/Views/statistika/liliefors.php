<?= $this->extend('layouts/base'); ?>
<?= $this->section('content'); ?>

<div class="">
    <div class="bg-gray-50 overflow-auto shadow card">
        <table class="text-left w-full border-collapse">
            <thead class="bg-sidebar text-black text-center">
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Nilai
                    </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Frekuensi Kumulatif
                    </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Zi
                    </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        F(Zi)
                    </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        S(Zi)
                    </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        |F(Zi) - S(Zi)|
                    </th>
                </tr>
            </thead>
            <tbody>

                <tr class="hover:bg-grey-lighter text-center">
                    <td class="py-4 px-6 border-b border-grey-light">
                        <!-- 1 -->
                    </td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        <!-- 2 -->
                    </td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        <!-- 3 -->
                    </td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        <!-- 4 -->
                    </td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        <!-- 5 -->
                    </td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        <!-- 6 -->
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>


<?= $this->endSection(); ?>