<?php 

class Slide {
    private $id;
    private $nome;
    private $slide;
    private $orderId;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSlide() {
        return $this->slide;
    }

    public function setSlide($slide) {
        $this->slide = $slide;
    }

    public function getOrderId() {
        return $this->orderId;
    }

    public function setOrderId($orderId) {
        $this->orderId = $orderId;
    }
}
