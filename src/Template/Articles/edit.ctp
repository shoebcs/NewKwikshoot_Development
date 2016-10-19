<!-- File: src/Template/Articles/edit.ctp -->
<h1>Edit Article</h1>
<?php
echo $this->Form->create($article);
echo $this->Form->input('title');
echo $this->Form->input('body', ['rows' => '2']);
echo $this->Form->button(__('Save Article'));
echo $this->Form->end();
?>