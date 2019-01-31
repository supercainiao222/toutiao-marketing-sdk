<?php
/**
 * 创建兴趣词包
 * https://ad.toutiao.com/openapi/doc/index.html?id=135
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 16:54
 */

namespace Tool\InterestTag\V1;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsInterestTagsCreate extends RpcRequest
{
    protected $url = '/2/tools/interest_tags/create/';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var int $advertiser_id
     */
    private $advertiser_id;

    /**
     * 兴趣词包名称
     * @var string $name
     */
    private $name;

    /**
     * 兴趣词包具体内容
     * @var array $words
     */
    private $words;

    /**
     * @return int
     */
    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    /**
     * @param int $advertiser_id
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->params["advertiser_id"] = $advertiser_id;
        $this->advertiser_id = $advertiser_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->params["name"] = $name;
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * @param array $words
     * @return $this
     */
    public function setWords($words)
    {
        $this->params["words"] = $words;
        $this->words = $words;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
        RequestCheckUtil::checkNotNull($this->name, 'name');
        RequestCheckUtil::checkNotNull($this->words, 'words');
    }
}