<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: live/request/request_live.proto

namespace Volc\Service\Live\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Live.Models.Request.ListDomainDetailRequest</code>
 */
class ListDomainDetailRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *当前页码，取值范围为 。
     *
     * Generated from protobuf field <code>int64 PageNum = 1;</code>
     */
    protected $PageNum = 0;
    /**
     *分页大小，取值范围为 。
     *
     * Generated from protobuf field <code>int64 PageSize = 2;</code>
     */
    protected $PageSize = 0;
    /**
     *配置空间列表，缺省情况下表示过滤全部。
     *
     * Generated from protobuf field <code>repeated string VhostList = 3;</code>
     */
    private $VhostList;
    /**
     *域名状态列表。缺省情况下表示过滤全部。状态说明如下所示。
     * <li>0：正常；
     * <li>1：审核中；
     * <li>2：禁用，禁止使用，此时domain不生效；
     * <li>3：删除；
     * <li>4：审核被驳回。审核不通过，需要重新创建并审核；
     * <li>5：欠费关停。
     *
     * Generated from protobuf field <code>repeated string DomainStatusList = 4;</code>
     */
    private $DomainStatusList;
    /**
     *域名类型列表。缺省情况下表示过滤全部。域名类型包括：
     * <li>push：推流域名；
     * <li>pull-flv：拉流域名。
     *
     * Generated from protobuf field <code>repeated string DomainTypeList = 5;</code>
     */
    private $DomainTypeList;
    /**
     *域名区域列表。缺省情况下表示过滤全部，区域包括：
     * <li>cn：中国大陆；
     * <li>oversea：海外。
     *
     * Generated from protobuf field <code>repeated string DomainRegionList = 6;</code>
     */
    private $DomainRegionList;
    /**
     *域名名称列表，缺省情况下表示过滤全部。
     *
     * Generated from protobuf field <code>repeated string DomainNameList = 7;</code>
     */
    private $DomainNameList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $PageNum
     *          当前页码，取值范围为 。
     *     @type int|string $PageSize
     *          分页大小，取值范围为 。
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $VhostList
     *          配置空间列表，缺省情况下表示过滤全部。
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $DomainStatusList
     *          域名状态列表。缺省情况下表示过滤全部。状态说明如下所示。
     *           <li>0：正常；
     *           <li>1：审核中；
     *           <li>2：禁用，禁止使用，此时domain不生效；
     *           <li>3：删除；
     *           <li>4：审核被驳回。审核不通过，需要重新创建并审核；
     *           <li>5：欠费关停。
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $DomainTypeList
     *          域名类型列表。缺省情况下表示过滤全部。域名类型包括：
     *           <li>push：推流域名；
     *           <li>pull-flv：拉流域名。
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $DomainRegionList
     *          域名区域列表。缺省情况下表示过滤全部，区域包括：
     *           <li>cn：中国大陆；
     *           <li>oversea：海外。
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $DomainNameList
     *          域名名称列表，缺省情况下表示过滤全部。
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Live\Models\GPBMetadata\RequestLive::initOnce();
        parent::__construct($data);
    }

    /**
     *当前页码，取值范围为 。
     *
     * Generated from protobuf field <code>int64 PageNum = 1;</code>
     * @return int|string
     */
    public function getPageNum()
    {
        return $this->PageNum;
    }

    /**
     *当前页码，取值范围为 。
     *
     * Generated from protobuf field <code>int64 PageNum = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPageNum($var)
    {
        GPBUtil::checkInt64($var);
        $this->PageNum = $var;

        return $this;
    }

    /**
     *分页大小，取值范围为 。
     *
     * Generated from protobuf field <code>int64 PageSize = 2;</code>
     * @return int|string
     */
    public function getPageSize()
    {
        return $this->PageSize;
    }

    /**
     *分页大小，取值范围为 。
     *
     * Generated from protobuf field <code>int64 PageSize = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->PageSize = $var;

        return $this;
    }

    /**
     *配置空间列表，缺省情况下表示过滤全部。
     *
     * Generated from protobuf field <code>repeated string VhostList = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVhostList()
    {
        return $this->VhostList;
    }

    /**
     *配置空间列表，缺省情况下表示过滤全部。
     *
     * Generated from protobuf field <code>repeated string VhostList = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVhostList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->VhostList = $arr;

        return $this;
    }

    /**
     *域名状态列表。缺省情况下表示过滤全部。状态说明如下所示。
     * <li>0：正常；
     * <li>1：审核中；
     * <li>2：禁用，禁止使用，此时domain不生效；
     * <li>3：删除；
     * <li>4：审核被驳回。审核不通过，需要重新创建并审核；
     * <li>5：欠费关停。
     *
     * Generated from protobuf field <code>repeated string DomainStatusList = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDomainStatusList()
    {
        return $this->DomainStatusList;
    }

    /**
     *域名状态列表。缺省情况下表示过滤全部。状态说明如下所示。
     * <li>0：正常；
     * <li>1：审核中；
     * <li>2：禁用，禁止使用，此时domain不生效；
     * <li>3：删除；
     * <li>4：审核被驳回。审核不通过，需要重新创建并审核；
     * <li>5：欠费关停。
     *
     * Generated from protobuf field <code>repeated string DomainStatusList = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDomainStatusList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->DomainStatusList = $arr;

        return $this;
    }

    /**
     *域名类型列表。缺省情况下表示过滤全部。域名类型包括：
     * <li>push：推流域名；
     * <li>pull-flv：拉流域名。
     *
     * Generated from protobuf field <code>repeated string DomainTypeList = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDomainTypeList()
    {
        return $this->DomainTypeList;
    }

    /**
     *域名类型列表。缺省情况下表示过滤全部。域名类型包括：
     * <li>push：推流域名；
     * <li>pull-flv：拉流域名。
     *
     * Generated from protobuf field <code>repeated string DomainTypeList = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDomainTypeList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->DomainTypeList = $arr;

        return $this;
    }

    /**
     *域名区域列表。缺省情况下表示过滤全部，区域包括：
     * <li>cn：中国大陆；
     * <li>oversea：海外。
     *
     * Generated from protobuf field <code>repeated string DomainRegionList = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDomainRegionList()
    {
        return $this->DomainRegionList;
    }

    /**
     *域名区域列表。缺省情况下表示过滤全部，区域包括：
     * <li>cn：中国大陆；
     * <li>oversea：海外。
     *
     * Generated from protobuf field <code>repeated string DomainRegionList = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDomainRegionList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->DomainRegionList = $arr;

        return $this;
    }

    /**
     *域名名称列表，缺省情况下表示过滤全部。
     *
     * Generated from protobuf field <code>repeated string DomainNameList = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDomainNameList()
    {
        return $this->DomainNameList;
    }

    /**
     *域名名称列表，缺省情况下表示过滤全部。
     *
     * Generated from protobuf field <code>repeated string DomainNameList = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDomainNameList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->DomainNameList = $arr;

        return $this;
    }

}
