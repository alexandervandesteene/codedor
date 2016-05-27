<h1>bewerk nieuwsbericht</h1>
<?php
echo $this->Form->create('News');
echo $this->Form->input('title');
echo $this->Form->input('intro');
echo $this->Form->input('description');
echo $this->Form->input('online');
echo $this->Form->input('publish-date');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('opslaan wijzigingen');
?>