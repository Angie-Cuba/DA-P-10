<?php $title = 'Lista de Libros' ?>
<?php ob_start() ?>
    <h1>Lista de Libros</h1>
    <ul>
        <?php foreach ($posts as $post): ?>
        <li>
            <a href="/read?id=<?php echo $post['id']?>">
                <?php echo $post['title']?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php $content = ob_get_clean() ?>
    <?php include 'base.php' ?>

    /* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

