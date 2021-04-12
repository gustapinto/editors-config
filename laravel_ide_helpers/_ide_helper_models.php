<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Client
 *
 * @property int $id
 * @property string $name
 * @property string $cpf_cnpj
 * @property string $contact
 * @property string $email
 * @property string $phone
 * @property int $creator_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client query()
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCpfCnpj($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUpdatedAt($value)
 */
	class Client extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClockRecord
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $started_at
 * @property \Illuminate\Support\Carbon|null $finished_at
 * @property int $owner_id
 * @property int $creator_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $creator
 * @property-read \App\User $owner
 * @method static \Illuminate\Database\Eloquent\Builder|ClockRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClockRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClockRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClockRecord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClockRecord whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClockRecord whereFinishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClockRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClockRecord whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClockRecord whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClockRecord whereUpdatedAt($value)
 */
	class ClockRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Milestone
 *
 * @property int $id
 * @property string $name
 * @property int $contracted_hours
 * @property string $start_date
 * @property string $end_date
 * @property int $creator_id
 * @property int $project_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Project $project
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone onlyActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone query()
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone whereContractedHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone whereUpdatedAt($value)
 */
	class Milestone extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MonthlyWorkload
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $month
 * @property int $workload_in_hours
 * @property int $user_id
 * @property int $creator_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $creator
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyWorkload newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyWorkload newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyWorkload query()
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyWorkload whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyWorkload whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyWorkload whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyWorkload whereMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyWorkload whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyWorkload whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyWorkload whereWorkloadInHours($value)
 */
	class MonthlyWorkload extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Organization
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon $expiration_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Organization newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organization newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organization query()
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereExpirationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereUpdatedAt($value)
 */
	class Organization extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Project
 *
 * @property int $id
 * @property string $name
 * @property int $default_milestone_hours
 * @property string $hour_value
 * @property int $creator_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $client_id
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project onlyActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDefaultMilestoneHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereHourValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 */
	class Project extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Task
 *
 * @property int $id
 * @property string $name
 * @property string $estimated_hours
 * @property string|null $billable_hours
 * @property int $creator_id
 * @property int $milestone_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $status
 * @property-read mixed $status_label
 * @property-read \App\Models\Milestone $milestone
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TimeControl[] $timeControls
 * @property-read int|null $time_controls_count
 * @method static \Illuminate\Database\Eloquent\Builder|Task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task query()
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereBillableHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereEstimatedHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereMilestoneActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereMilestoneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereUpdatedAt($value)
 */
	class Task extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TimeControl
 *
 * @property int $id
 * @property int $task_id
 * @property string $started_at
 * @property string|null $finished_at
 * @property int $owner_id
 * @property int $creator_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Task $creator
 * @property-read \App\Models\Task $task
 * @method static \Illuminate\Database\Eloquent\Builder|TimeControl newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeControl newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeControl query()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeControl whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeControl whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeControl whereFinishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeControl whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeControl whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeControl whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeControl whereTaskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeControl whereUpdatedAt($value)
 */
	class TimeControl extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property int $organization_id
 * @property int $profile
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ClockRecord[] $clockRecords
 * @property-read int|null $clock_records_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Organization $organization
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOrganizationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

