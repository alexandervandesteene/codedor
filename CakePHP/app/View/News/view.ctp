<h1><?php echo h($news['News']['title']); ?></h1>
<br>
<p><?php echo $news['News']['intro']; ?></p>

<p><?php echo $news['News']['description']; ?></p>

<p><small>Created: <?php echo $news['News']['publish_date']; ?></small></p>


<button><?php echo $this->Html->link('terug', array('action' => 'index')); ?></button>