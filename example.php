// PHP Example for OpenCart 1.5

<?php 

  $num_pages = ceil($product_total / $limit);
  
  // Canonical
  if ($page == 1) {
      $this->document->addLink($this->url->link('product/category', 'path=' . $this->request->get['path']), 'canonical');
  } else {
      $this->document->addLink($this->url->link('product/category', 'path=' . $this->request->get['path'] . '&page=' . $page), 'canonical');
  }
  
  // Next
  if ($page < $num_pages) {
      $this->document->addLink($this->url->link('product/category', 'path=' . $this->request->get['path'] . '&page=' . ($page + 1)), 'next');
  }
  
  // Prev
  if ($page > 1) {
  
      if ($page == 2) {
          $this->document->addLink($this->url->link('product/category', 'path=' . $this->request->get['path']), 'prev');
      } else {
          $this->document->addLink($this->url->link('product/category', 'path=' . $this->request->get['path'] . '&page=' . ($page - 1)), 'prev');
      }
  }
