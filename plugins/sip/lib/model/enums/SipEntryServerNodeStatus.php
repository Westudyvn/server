<?php

/**
 * @package plugins.sip
 * @subpackage model.enum
 */
interface SipEntryServerNodeStatus extends EntryServerNodeStatus
{
	const CREATED = 11;
	const ACTIVE = 12;
	const ENDED = 13;
}