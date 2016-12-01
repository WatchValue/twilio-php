<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Video\V1;

use Twilio\Options;
use Twilio\Values;

abstract class RoomOptions {
    /**
     * @param boolean $enableTurn The enable_turn
     * @param string $type The type
     * @param string $uniqueName The unique_name
     * @param string $statusCallback The status_callback
     * @param string $statusCallbackMethod The status_callback_method
     * @param integer $maxParticipants The max_participants
     * @param boolean $recordParticipantsOnConnect The
     *                                             record_participants_on_connect
     * @return CreateRoomOptions Options builder
     */
    public static function create($enableTurn = Values::NONE, $type = Values::NONE, $uniqueName = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $maxParticipants = Values::NONE, $recordParticipantsOnConnect = Values::NONE) {
        return new CreateRoomOptions($enableTurn, $type, $uniqueName, $statusCallback, $statusCallbackMethod, $maxParticipants, $recordParticipantsOnConnect);
    }

    /**
     * @param string $status The status
     * @param \DateTime $startTimeAfter The start_time_after
     * @param \DateTime $startTimeBefore The start_time_before
     * @param string $uniqueName The unique_name
     * @return ReadRoomOptions Options builder
     */
    public static function read($status = Values::NONE, $startTimeAfter = Values::NONE, $startTimeBefore = Values::NONE, $uniqueName = Values::NONE) {
        return new ReadRoomOptions($status, $startTimeAfter, $startTimeBefore, $uniqueName);
    }
}

class CreateRoomOptions extends Options {
    /**
     * @param boolean $enableTurn The enable_turn
     * @param string $type The type
     * @param string $uniqueName The unique_name
     * @param string $statusCallback The status_callback
     * @param string $statusCallbackMethod The status_callback_method
     * @param integer $maxParticipants The max_participants
     * @param boolean $recordParticipantsOnConnect The
     *                                             record_participants_on_connect
     */
    public function __construct($enableTurn = Values::NONE, $type = Values::NONE, $uniqueName = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $maxParticipants = Values::NONE, $recordParticipantsOnConnect = Values::NONE) {
        $this->options['enableTurn'] = $enableTurn;
        $this->options['type'] = $type;
        $this->options['uniqueName'] = $uniqueName;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        $this->options['maxParticipants'] = $maxParticipants;
        $this->options['recordParticipantsOnConnect'] = $recordParticipantsOnConnect;
    }

    /**
     * The enable_turn
     * 
     * @param boolean $enableTurn The enable_turn
     * @return $this Fluent Builder
     */
    public function setEnableTurn($enableTurn) {
        $this->options['enableTurn'] = $enableTurn;
        return $this;
    }

    /**
     * The type
     * 
     * @param string $type The type
     * @return $this Fluent Builder
     */
    public function setType($type) {
        $this->options['type'] = $type;
        return $this;
    }

    /**
     * The unique_name
     * 
     * @param string $uniqueName The unique_name
     * @return $this Fluent Builder
     */
    public function setUniqueName($uniqueName) {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * The status_callback
     * 
     * @param string $statusCallback The status_callback
     * @return $this Fluent Builder
     */
    public function setStatusCallback($statusCallback) {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * The status_callback_method
     * 
     * @param string $statusCallbackMethod The status_callback_method
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod($statusCallbackMethod) {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        return $this;
    }

    /**
     * The max_participants
     * 
     * @param integer $maxParticipants The max_participants
     * @return $this Fluent Builder
     */
    public function setMaxParticipants($maxParticipants) {
        $this->options['maxParticipants'] = $maxParticipants;
        return $this;
    }

    /**
     * The record_participants_on_connect
     * 
     * @param boolean $recordParticipantsOnConnect The
     *                                             record_participants_on_connect
     * @return $this Fluent Builder
     */
    public function setRecordParticipantsOnConnect($recordParticipantsOnConnect) {
        $this->options['recordParticipantsOnConnect'] = $recordParticipantsOnConnect;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Video.V1.CreateRoomOptions ' . implode(' ', $options) . ']';
    }
}

class ReadRoomOptions extends Options {
    /**
     * @param string $status The status
     * @param \DateTime $startTimeAfter The start_time_after
     * @param \DateTime $startTimeBefore The start_time_before
     * @param string $uniqueName The unique_name
     */
    public function __construct($status = Values::NONE, $startTimeAfter = Values::NONE, $startTimeBefore = Values::NONE, $uniqueName = Values::NONE) {
        $this->options['status'] = $status;
        $this->options['startTimeAfter'] = $startTimeAfter;
        $this->options['startTimeBefore'] = $startTimeBefore;
        $this->options['uniqueName'] = $uniqueName;
    }

    /**
     * The status
     * 
     * @param string $status The status
     * @return $this Fluent Builder
     */
    public function setStatus($status) {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * The start_time_after
     * 
     * @param \DateTime $startTimeAfter The start_time_after
     * @return $this Fluent Builder
     */
    public function setStartTimeAfter($startTimeAfter) {
        $this->options['startTimeAfter'] = $startTimeAfter;
        return $this;
    }

    /**
     * The start_time_before
     * 
     * @param \DateTime $startTimeBefore The start_time_before
     * @return $this Fluent Builder
     */
    public function setStartTimeBefore($startTimeBefore) {
        $this->options['startTimeBefore'] = $startTimeBefore;
        return $this;
    }

    /**
     * The unique_name
     * 
     * @param string $uniqueName The unique_name
     * @return $this Fluent Builder
     */
    public function setUniqueName($uniqueName) {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Video.V1.ReadRoomOptions ' . implode(' ', $options) . ']';
    }
}