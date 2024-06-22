<header>
    <h2>Observer</h2>
    <span class="badge text-bg-primary">Behavioral</span>
</header>

<p>Le modèle Observer est un modèle de conception qui définit une dépendance entre des objets de manière à ce que lorsqu'un
    objet change d'état, tous ses dépendants soient notifiés et mis à jour automatiquement.</p>

<p>L'Observer est reconnaissable par une relation Sujet et Observateurs</p>
<p>PHP inclus 2 interfaces <a target="_blank" href="https://www.php.net/manual/en/class.splobserver.php"><code>SplSubject</code></a> et <a target="_blank" href="https://www.php.net/manual/en/class.splobserver.php"><code>SplObserver</code></a> pour construire ce pattern.</p>

<div>
    <h3>Exemple de code</h3>
    <?php echo '<pre><code class="language-php">'.htmlentities(file_get_contents('./src/Behavioral/Observer/Observer.php')).'</code></pre>'; ?>

    <h3>Application du pattern Observer</h3>
        <p>Le code suivant illustre l'application du modèle Observer.</p>
        <?php echo '<pre><code class="language-php">'.htmlentities(file_get_contents('./src/Behavioral/Observer/Application.php')).'</code></pre>'; ?>
    <h4>Résultat</h4>
    <div class="result">
        <pre><code><?php require_once './src/Behavioral/Observer/Application.php'; ?></code></pre>
    </div>
</div>