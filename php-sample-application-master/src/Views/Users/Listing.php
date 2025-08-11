<?php

namespace Views\Users;

class Listing
{
    protected $users;

    public function __construct(array $users)
    {
        $this->users = $users;
    }

    public function __invoke(): void
    {
        ?>
        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-body">
                    <h1>The newcomers:</h1>

                    <?php
                    /** @var \Entity\User $user */
                    foreach ($this->users as $user) {
                        $userId = htmlspecialchars($user->id);
                        ?>
                        <div class="media">
                            <a class="media-left" href="/<?= $userId ?>">
                                <img alt="@<?= $userId ?> avatar" class="img-rounded" src="/img/<?= $userId ?>">
                            </a>
                            <div class="media-body">
                                <p>
                                    <a href="/<?= $userId ?>">
                                        <strong class="fullname"><?= htmlspecialchars($user->name) ?></strong>
                                    </a> 
                                    <a href="/<?= $userId ?>">@<?= $userId ?></a>
                                </p>
                                <small>joined <span class="time"><?= htmlspecialchars($user->joined) ?></span></small>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                    <hr>

                    <h2>Alternate Listing (Simple Style)</h2>
                    <?php
                    foreach ($this->users as $user) {
                        echo '<div class="user" style="display:flex;align-items:center;margin-bottom:10px;">';
                        echo '<img src="' . htmlspecialchars($user->avatar) . '" alt="User avatar" style="border-radius:50%;width:50px;height:50px;margin-right:15px;">';
                        echo '<div>';
                        echo '<div class="name" style="font-weight:bold;">' . htmlspecialchars($user->name) . '</div>';
                        echo '<div class="joined" style="font-size:0.9em;color:#777;">Joined: ' . htmlspecialchars($user->joined) . '</div>';
                        echo '</div></div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
}
