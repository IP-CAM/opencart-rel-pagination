// PHP Example for OpenCart 1.5

<?php 

  $url = '';

  if (isset($this->request->get['search'])) {
      $url .= 'search=' . urlencode(html_entity_decode($this->request->get['search'], ENT_QUOTES, 'UTF-8'));
  } else if (isset($this->request->get['tag'])) {
      $url .= 'tag=' . urlencode(html_entity_decode($this->request->get['tag'], ENT_QUOTES, 'UTF-8'));
  }

  if (isset($this->request->get['description'])) {
      $url .= '&description=' . $this->request->get['description'];
  }

  if (isset($this->request->get['filter_category_id'])) {
      $url .= '&filter_category_id=' . $this->request->get['filter_category_id'];
  }

  if (isset($this->request->get['sub_category'])) {
      $url .= '&sub_category=' . $this->request->get['sub_category'];
  }


  $num_pages = ceil($product_total / $limit);

  if ($page == 1) {
      $this->document->addLink($this->url->link('product/search', $url), 'canonical');
  } else {
      $this->document->addLink($this->url->link('product/search', $url . '&page=' . $page), 'canonical');
  }

  if ($page < $num_pages) {
      $this->document->addLink($this->url->link('product/search', $url . '&page=' . ($page + 1)), 'next');
  }

  if ($page > 1) {

      // Remove page duplicate
      if ($page == 2) {
          $this->document->addLink($this->url->link('product/search', $url), 'prev');
      } else {
          $this->document->addLink($this->url->link('product/search', $url . '&page=' . ($page - 1)), 'prev');
      }
  }
