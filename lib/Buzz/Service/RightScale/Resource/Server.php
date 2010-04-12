<?php

namespace Buzz\Service\RightScale\Resource;

use Buzz\Message;

class Server extends AbstractResource
{
  protected $currentInstanceHref;
  protected $createdAt;
  protected $state;
  protected $serverTemplateHref;
  protected $updatedAt;
  protected $nickname;
  protected $serverType;
  protected $href;
  protected $deploymentHref;

  /**
   * @var TagCollection
   */
  protected $tags;

  /**
   * @see AbstractResource
   */
  public function fromArray(array $array)
  {
    $this->setCurrentInstanceHref($array['current_instance_href']);
    $this->setCreatedAt(new \DateTime($array['created_at']));
    $this->setState($array['state']);
    $this->setServerTemplateHref($array['server_template_href']);
    $this->setUpdatedAt(new \DateTime($array['updated_at']));
    $this->setNickname($array['nickname']);
    $this->setServerType($array['server_type']);
    $this->setHref($array['href']);
    $this->setDeploymentHref($array['deployment_href']);

    $tags = new TagCollection();
    $tags->fromArray($array['tags']);
    $this->setTags($tags);
  }

  public function getId()
  {
    return basename($this->getHref());
  }

  // accessors and mutators

  public function setNickname($nickname)
  {
    $this->nickname = $nickname;
  }

  public function getNickname()
  {
    return $this->nickname;
  }

  public function setServerType($serverType)
  {
    $this->serverType = $serverType;
  }

  public function getServerType()
  {
    return $this->serverType;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setDeploymentHref($deploymentHref)
  {
    $this->deploymentHref = $deploymentHref;
  }

  public function getDeploymentHref()
  {
    return $this->deploymentHref;
  }

  public function setCurrentInstanceHref($currentInstanceHref)
  {
    $this->currentInstanceHref = $currentInstanceHref;
  }

  public function getCurrentInstanceHref()
  {
    return $this->currentInstanceHref;
  }

  public function setTags(TagCollection $tags)
  {
    $this->tags = $tags;
  }

  public function getTags()
  {
    return $this->tags;
  }

  public function setCreatedAt(\DateTime $createdAt)
  {
    $this->createdAt = $createdAt;
  }

  public function getCreatedAt()
  {
    return $this->createdAt;
  }

  public function setUpdatedAt(\DateTime $updatedAt)
  {
    $this->updatedAt = $updatedAt;
  }

  public function getUpdatedAt()
  {
    return $this->updatedAt;
  }

  public function setHref($href)
  {
    $this->href = $href;
  }

  public function getHref()
  {
    return $this->href;
  }

  public function setServerTemplateHref($serverTemplateHref)
  {
    $this->serverTemplateHref = $serverTemplateHref;
  }

  public function getServerTemplateHref()
  {
    return $this->serverTemplateHref;
  }
}
