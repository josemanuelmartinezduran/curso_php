<?php
namespace App\Models;

    class PrimeGenerator{
        /**
     * Generates an array of prime numbers up to the given limit.
     *
     * @param int $n The limit up to which to find prime numbers.
     * @return array An array of prime numbers.
     */
    public function generatePrimes(int $n): array
    {
        $primes = [];
        $i = 2;
        while(count($primes) < $n) {
            if ($this->isPrime($i)) {
                $primes[] = $i;
            }
            $i++;
        }
        return $primes;
    }

    /**
     * Checks if a number is prime.
     *
     * @param int $n The number to check.
     * @return bool True if the number is prime, false otherwise.
     */
    public function isPrime(int $n): bool
    {
        if ($n <= 1) {
            return false;
        }

        // Optimization: Only need to check up to the square root of n
        for ($i = 2; $i * $i <= $n; $i++) {
            if ($n % $i === 0) {
                return false;
            }
        }
        return true;
    }
    }
