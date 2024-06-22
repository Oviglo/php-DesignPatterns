<header>
    <h2>Singleton</h2>
    <span class="badge text-bg-primary">Creational</span>
</header>
<p>Le modèle Singleton est un modèle de conception qui garantit qu'une classe n'a qu'une seule instance et fournit un
    point d'accès global à cette instance.</p>
<p>Le Singleton est reconnaissable par son <strong>constructeur privé</strong> et une <strong>méthode statique</strong>
    <code>getInstance()</code>.
</p>

<div>
    <h3>Exemple de code</h3>
    <?php echo '<pre><code class="language-php">'.htmlentities(file_get_contents('./src/Creational/Singleton/Singleton.php')).'</code></pre>'; ?>

    <h3>Application du pattern Singleton</h3>
    <p>Le code suivant illustre l'application du modèle Singleton.</p>
    <?php echo '<pre><code class="language-php">'.htmlentities(file_get_contents('./src/Creational/Singleton/Application.php')).'</code></pre>'; ?>
    <h4>Résultat</h4>
    <div class="result">
        <pre><code><?php require_once './src/Creational/Singleton/Application.php'; ?></code></pre>
    </div>
</div>