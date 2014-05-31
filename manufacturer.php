// PHP Example for OpenCart 1.5

<?php 

    $num_pages = ceil($product_total / $limit);

    if ($page == 1) {
        $this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id']), 'canonical');
    } else {
        $this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&page=' . $page), 'canonical');
    }

    if ($page < $num_pages) {
        $this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&page=' . ($page + 1)), 'next');
    }

    if ($page > 1) {

        // Remove page duplicate
        if ($page == 2) {
            $this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id']), 'prev');
        } else {
            $this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&page=' . ($page - 1)), 'prev');
        }
    }
