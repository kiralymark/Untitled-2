<?php
class ListNode {
    public $data = NULL;
    public $next = NULL;

    public function __construct($data = NULL) {
        $this->data = $data;
    }
}

class LinkedList {
    private $firstNode = NULL;

    // CREATE
    public function insert($data) {
        $newNode = new ListNode($data);
        if ($this->firstNode === NULL) {
            $this->firstNode = $newNode;
        } else {
            $currentNode = $this->firstNode;
            while ($currentNode->next !== NULL) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
    }

    // READ
    public function traverse() {
        $currentNode = $this->firstNode;
        while ($currentNode !== NULL) {
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->next;
        }
    }

    // UPDATE
    public function update($oldData, $newData) {
        $currentNode = $this->firstNode;
        while ($currentNode !== NULL) {
            if ($currentNode->data === $oldData) {
                $currentNode->data = $newData;
                return true;
            }
            $currentNode = $currentNode->next;
        }
        return false;
    }

    // DELETE
    public function delete($data) {
        $current = $this->firstNode;
        $prev = NULL;
        while ($current !== NULL) {
            if ($current->data === $data) {
                if ($prev === NULL) {
                    $this->firstNode = $current->next;
                } else {
                    $prev->next = $current->next;
                }
                return;
            }
            $prev = $current;
            $current = $current->next;
        }
    }
	
}

$list = new LinkedList();
$list->insert(11);
$list->insert(24);
$list->insert(32);
$list->insert(47);
$list->insert(53);

echo "Linked List: \n";
$list->traverse();

$list->update(24, 99);
echo "Linked List after updating 24 to 99: \n";
$list->traverse();

$list->delete(32);
echo "Linked List after deleting 32: \n";
$list->traverse();
?>
