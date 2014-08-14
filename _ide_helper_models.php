<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace {
/**
 * User
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $username
 * @property string $password
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereUpdatedAt($value)
 */
	class User {}
}

namespace {
/**
 * Created by PhpStorm.
 * 
 * User: renato
 * Date: 13/08/14
 * Time: 22:50
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $post
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Post whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Post whereUserId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Post whereTitle($value) 
 * @method static \Illuminate\Database\Query\Builder|\Post wherePost($value) 
 * @method static \Illuminate\Database\Query\Builder|\Post whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Post whereUpdatedAt($value) 
 */
	class Post {}
}

