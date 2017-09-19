<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Titre</th>
        <th>Editer</th>
        <th>Créé le</th>
        <th>Editer le</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
            array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link(
                'Editer',
                array('action' => 'edit', $post['Post']['id'])
            ); ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
        <td><?php echo $post['Post']['modified']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
<?php echo $this->Html->link(
    'Ajouter un Post',
    array('controller' => 'posts', 'action' => 'add')
); ?>