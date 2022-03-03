<?php

namespace App\Providers\UserProvider;

use Illuminate\Contracts\Hashing\Hasher as HasherContract;

class EccubeHasher implements HasherContract
{
    /**
     * Get information about the given hashed value.
     *
     * @param  string  $hashedValue
     * @return array
     */
    public function info($hashedValue)
    {
    }

    /**
     * Hash the given value.
     *
     * @param  string  $value
     * @param  array  $options
     * @return string
     */
    public function make($value, array $options = [])
    {
        // メアドカラムはユニークではないが、ECCUBEの登録時に重複チェックをしているためユニークなのが保証されている（はず）
        return hash_hmac(config('hashing.eccube_password_hash_algos'), $value . ':' . config('hashing.eccube_auth_magic'), $options['salt']);
    }

    /**
     * Check the given plain value against a hash.
     *
     * @param  string  $value
     * @param  string  $hashedValue
     * @param  array  $options
     * @return bool
     */
    public function check($value, $hashedValue, array $options = [])
    {
        return $this->make($value, $options) === $hashedValue;
    }

    /**
     * Check if the given hash has been hashed using the given options.
     *
     * @param  string  $hashedValue
     * @param  array  $options
     * @return bool
     */
    public function needsRehash($hashedValue, array $options = [])
    {
    }
}
