<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</head>
<body>
    <header>
        <img src="<?php echo e(asset('images/logo.jpg')); ?>" alt="Logo" class="logo">
        <nav>
            <a href="<?php echo e(route('home')); ?>">Home</a>
            <a href="<?php echo e(route('about')); ?>">About</a>
            <a href="<?php echo e(route('customers')); ?>">Customers</a>
            <a href="<?php echo e(route('services')); ?>">Services</a>
            <a href="<?php echo e(route('contact')); ?>">Contact</a>
        </nav>
    </header>

    <main class="container mt-5">
        <h1>Contact Us</h1>

        <?php if(session('success')): ?>
            <p><?php echo e(session('success')); ?></p>
        <?php endif; ?>

        <form action="<?php echo e(url('/contact')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">الاسم:</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="email">البريد الإلكتروني:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="message">الرسالة:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            
            <button type="submit">إرسال</button>
            <button type="reset">مسح</button>
        </form>

        <div class="contact-media mt-5">
            <h2>Follow Us</h2>
            <a href="https://x.com/Panorama_Q" class="icon" aria-label="Twitter">
                <i class="fab fa-twitter"></i>
                <span class="label">Twitter</span>
            </a>
            <a href="https://facebook.com/palqassim" class="icon" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
                <span class="label">Facebook</span>
            </a>
            <a href="https://api.whatsapp.com/send/?phone=9660553172552" class="icon" aria-label="Whatsapp">
                <i class="fab fa-whatsapp"></i>
                <span class="label">Whatsapp</span>
            </a>
            <a href="https://snapchat.com/t/mh05HGb6" class="icon" aria-label="Snapchat">
                <i class="fab fa-snapchat"></i>
                <span class="label">Snapchat</span>
            </a>
            <a href="https://tiktok.com/@panorama_alqassim" class="icon" aria-label="Tiktok">
                <i class="fab fa-tiktok"></i>
                <span class="label">Tiktok</span>
            </a>
            <a href="https://instagram.com/palqassim/" class="icon" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
                <span class="label">Instagram</span>
            </a>
        </div>
    </main>

    <script src="<?php echo e(asset('js/scripts.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PrB_04\resources\views/contact.blade.php ENDPATH**/ ?>