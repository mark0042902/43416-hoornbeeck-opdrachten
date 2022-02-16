<?php
class Tree
{
    private string $leaves;
    private string $branch;
    private string $tribe;
    private string $roots;

    public function __construct($leaves, $branch, $tribe, $roots)
    {
        $this->$leaves = $leaves;
        $this->$branch = $branch;
        $this->$tribe = $tribe;
        $this->$roots = $roots;
    }

    public function makeTree()
    {
        echo $this->leaves;
        echo $this->branch;
        echo $this->tribe;
        echo $this->roots;
    }
}
$tree = new Tree("oak", "oak", "oak", "oak");
echo $this->makeTree;
