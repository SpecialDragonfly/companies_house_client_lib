<?php
namespace CH\UseCase\SignificantControl\Domain;

class Statement
{
    /**
     * @var string
     */
    private $statement;
    /**
     * @var string
     */
    private $restrictionsNoticeWithdrawalReason;
    /**
     * @var string
     */
    private $notifiedOn;
    /**
     * @var array<string, string>
     */
    private $links;
    /**
     * @var string
     */
    private $linkedPscName;
    /**
     * @var string
     */
    private $kind;
    /**
     * @var string
     */
    private $etag;
    /**
     * @var string
     */
    private $ceasedOn;

    public function __construct(array $jsonResponse)
    {
        $this->ceasedOn = $jsonResponse['ceased_on'];
        $this->etag = $jsonResponse['etag'];
        $this->kind = $jsonResponse['kind'];
        $this->linkedPscName = $jsonResponse['linked_psc_name'];
        $this->links = $jsonResponse['links'];
        $this->notifiedOn = $jsonResponse['notified_on'];
        $this->restrictionsNoticeWithdrawalReason = $jsonResponse['restrictions_notice_withdrawal_reason'];
        $this->statement = $jsonResponse['statement'];
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
        return $this->statement;
    }

    /**
     * @return string
     */
    public function getRestrictionsNoticeWithdrawalReason(): string
    {
        return $this->restrictionsNoticeWithdrawalReason;
    }

    /**
     * @return string
     */
    public function getNotifiedOn(): string
    {
        return $this->notifiedOn;
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @return string
     */
    public function getLinkedPscName(): string
    {
        return $this->linkedPscName;
    }

    /**
     * @return string
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @return string
     */
    public function getEtag(): string
    {
        return $this->etag;
    }

    /**
     * @return string
     */
    public function getCeasedOn(): string
    {
        return $this->ceasedOn;
    }
}