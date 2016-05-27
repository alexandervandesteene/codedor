<h1>Nieuws berichten</h1>

<p><?php echo $this->Html->link('toevoegen nieuwsbericht', array('action' => 'add')); ?></p>

<table>
    <tr>
        <th>Id</th>
        <th>titel</th>
        <th>publish-datem</th>
        <th>Actie's</th>
    </tr>

    <?php foreach ($news as $newsMessage): ?>
    <tr>
        <td> <?php echo $newsMessage['News']['id']; ?></td>
        <td> <?php echo $this->Html->link($newsMessage['News']['title'],array('action' => 'view', $newsMessage['News']['id']));?> </td>
        <td> <?php echo $newsMessage['News']['publish_date']; ?></td>
        <td>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $newsMessage['News']['id'])); ?>
            <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $newsMessage['News']['id']), array('confirm' => 'Are you sure?')); ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>