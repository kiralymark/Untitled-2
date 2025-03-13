<?php
class TreeNode {
    public $val = null;
    public $left = null;
    public $right = null;
    
    public function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
	
}

function createBinaryTree($descriptions) {
    $nodes = [];
    $hasParent = [];
    
    foreach ($descriptions as $desc) {
        list($parentVal, $childVal, $isLeft) = $desc;
        
        if (!isset($nodes[$parentVal])) {
            $nodes[$parentVal] = new TreeNode($parentVal);
        }
        
        if (!isset($nodes[$childVal])) {
            $nodes[$childVal] = new TreeNode($childVal);
        }
        
        if ($isLeft) {
            $nodes[$parentVal]->left = $nodes[$childVal];
        } else {
            $nodes[$parentVal]->right = $nodes[$childVal];
        }
        
        $hasParent[$childVal] = true;
    }
    
    foreach ($nodes as $key => $node) {
        if (!isset($hasParent[$key])) {

            echo "Root node: " . $node->val . "\n";

            return $node;
        }
    }
    
    return null;
}

function postOrderTraversal($root, &$result) {
    if (!$root) return;
    
    postOrderTraversal($root->left, $result);
    postOrderTraversal($root->right, $result);
    $result[] = $root->val;
}

function printPostOrder($root) {
    $result = [];
    postOrderTraversal($root, $result);
    echo "Output: [" . implode(",", $result) . "]\n";
}

$descriptions = array([20,15,1], [20,17,0], [50,20,1], [50,80,0], [80,19,1]);

$root = createBinaryTree($descriptions);


echo "</br>"."</br>";

print_r($descriptions);

echo "</br>"."</br>";

print_r($root);

echo "</br>"."</br>";

printPostOrder($root);
?>
