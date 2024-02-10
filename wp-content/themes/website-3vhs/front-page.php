
<?php get_header();  // Memanggil header untuk tata letak dan elemen-elemen umum ?>



    <div class="container">
        <h1><?php the_title(); // Menampilkan judul halaman yang di input dari WPAdmin ?></h1>


        <?php get_template_part('includes/section', 'content'); // Memuat bagian konten dari file 'section-content.php' ?>
    </div>
</section>

<?php get_footer(); // Memanggil footer untuk elemen-elemen tambahan dan penutup HTML ?>