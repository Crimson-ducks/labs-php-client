<?php
namespace Clearbooks\LabsClient\Toggle\UseCase\Response;

interface TogglePolicyResponse
{
    /**
     * @return bool
     */
    public function isDisabled();
    /**
     * @return bool
     */
    public function isEnabled();
    /**
     * @return bool
     */
    public function isNotSet();
}
//EOF TogglePolicyResponse.php