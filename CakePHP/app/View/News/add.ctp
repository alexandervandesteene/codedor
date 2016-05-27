<h1>toevoegen Nieuwsbericht</h1>
<?php
echo $this->Form->create('News');
echo $this->Form->input('title');
echo $this->Form->input('intro');
echo $this->Form->input('description');
echo $this->Form->input('online');
echo $this->Form->input('publish-date');
echo $this->Form->end('opslaan nieuwsbericht');
?>