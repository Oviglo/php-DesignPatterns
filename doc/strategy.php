<header>
    <h2>Strategy</h2>
    <span class="badge text-bg-primary">Behavioral</span>
</header>

<p>Le modèle Strategy est un modèle de conception qui permet de définir une famille d'objets, de les encapsuler et de les rendre interchangeables.</p>

<p>Le Strategy est reconnaissable par une interface qui définit des méthodes primaires et un ou plusieurs objets implémentant cette interface faisant la même chose mais d'une manière différente.</p>

<p>La classe qui fait appel aux méthodes ne se soucie pas du type d'objet, seulement qu'elle implémente de l'interface.</p>

<div>
    <h3>Exemple de code</h3>
    <?php echo '<pre><code class="language-php">'.htmlentities(file_get_contents('./src/Behavioral/Strategy/GeoLocAPI.php')).'</code></pre>'; ?>
    <?php echo '<pre><code class="language-php">'.htmlentities(file_get_contents('./src/Behavioral/Strategy/GoogleAPI.php')).'</code></pre>'; ?>
    <?php echo '<pre><code class="language-php">'.htmlentities(file_get_contents('./src/Behavioral/Strategy/GouvAPI.php')).'</code></pre>'; ?>

    <h3>Application du pattern Strategy</h3>
    <p>Le code suivant illustre l'application du modèle Strategy.</p>
    <?php echo '<pre><code class="language-php">'.htmlentities(file_get_contents('./src/Behavioral/Strategy/Application.php')).'</code></pre>'; ?>
    <h4>Résultat</h4>
    <div class="result">
        <pre><code><?php require_once './src/Behavioral/Strategy/Application.php'; ?></code></pre>
    </div>

    <h3>Autres exemples d'application</h3>

    <div>
        L'utilisation de plusieurs services de payement pour un site e-commerce. L'utilisation du pattern Strategy permet de produire un code qui sera adapté à chaque service de payement.
    </div>
</div>