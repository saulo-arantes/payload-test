<?php

namespace ChargebackService\Domain;

interface ChargebackInterface
{
    public function getReasonCode(): ?string;

    public function getDescription(): ?string;

    public function getCardBrand(): ?string;

    public function getCustomer(): ?string;

    public function getSite(): ?string;

    public function getBankIssuer(): ?string;

    public function getTransactionId(): string;

    public function getDisputeId(): ?string;

    public function getChargebackDate(): ?string;
}
