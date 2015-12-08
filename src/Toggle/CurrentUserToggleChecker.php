<?php
namespace Clearbooks\Labs\Client\Toggle;

use Clearbooks\Labs\Client\Toggle\Entity\Group;
use Clearbooks\Labs\Client\Toggle\Entity\User;
use Clearbooks\Labs\Client\Toggle\UseCase\IsCurrentUserToggleActive;
use Clearbooks\Labs\Client\Toggle\UseCase\ToggleChecker;

class CurrentUserToggleChecker implements IsCurrentUserToggleActive
{
    /** @var Group */
    private $group;
    /** @var User */
    private $user;
    /** @var StatelessToggleChecker */
    private $toggleChecker;

    /**
     * @param User $user
     * @param Group $group
     * @param ToggleChecker $toggleChecker
     */
    public function __construct(User $user, Group $group, ToggleChecker $toggleChecker)
    {
        $this->group = $group;
        $this->user = $user;
        $this->toggleChecker = $toggleChecker;
    }

    /**
     * @param string $toggleName
     * @return bool is it active
     */
    public function isToggleActive( $toggleName )
    {
        return $this->toggleChecker->isToggleActive($toggleName, $this->user, $this->group);
    }
}
//EOF CurrentUserToggleChecker.php