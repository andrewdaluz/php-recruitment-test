<?php

namespace Snowdog\DevTest\Model;

class Page
{
    public $page_id;
    public $url;
    public $website_id;
    public $load_time;
    public $last_view;

    public function __construct()
    {
        $this->website_id = intval($this->website_id);
        $this->page_id = intval($this->page_id);
        $this->load_time = $this->load_time;
        $this->last_view = $this->last_view;

    }

    /**
     * @return int
     */
    public function getPageId()
    {
        return $this->page_id;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return float
     */
    public function getLoadTime()
    {
        return $this->load_time;
    }

    /**
     * @return datetime
     */
    public function getLastView()
    {
        return $this->last_view;
    }

    /**
     * @return int
     */
    public function getWebsiteId()
    {
        return $this->website_id;
    }


}