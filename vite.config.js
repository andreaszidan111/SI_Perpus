import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/bootstrap.js',
                'resources/js/buku.js',
                'resources/js/dashboard.js',
                'resources/js/laporan.js',
                'resources/js/peminjaman.js',
                'resources/js/pengembalian.js',
                'resources/js/pengguna.js',
                'resources/js/siswa-buku.js',
                'resources/js/siswa-peminjaman.js',
                'resources/js/siswa-riwayat.js',
                'resources/js/siswa-status-peminjaman.js',
            ],            
            refresh: true,
        }),
    ],
});
