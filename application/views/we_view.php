<h1>О нашей компании</h1>
<img src="images/about.jpg" class="we">
<p>Вот список услуг, которые мы предоставляем:</p>

<ul>
    <?php foreach($data as $service): ?>
        <li><?php echo $service; ?></li>
    <?php endforeach; ?>
</ul>
