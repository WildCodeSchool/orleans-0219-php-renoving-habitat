<?php


namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class Recruitment
{
    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=1, max=120)
     */
    private $lastname;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=1, max=120)
     */
    private $firstname;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Regex(
     *     pattern="/[0-9]{10}/"
     * )
     */
    private $telephone;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @var string|null
     * @Assert\Length(min=1, max=4)
     */
    private $streetNumber;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=1, max=200)
     */
    private $streetName;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=1, max=120)
     */
    private $city;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Regex(
     *     pattern="/[0-9]{5}/"
     * )
     */

    private $postCode;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=10, max=5000)
     */
    private $message;

    /**
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param string|null $lastname
     * @return Recruitment
     */
    public function setLastname(?string $lastname): Recruitment
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param string|null $firstname
     * @return Recruitment
     */
    public function setFirstname(?string $firstname): Recruitment
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @param string|null $telephone
     * @return Recruitment
     */
    public function setTelephone(?string $telephone): Recruitment
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return Recruitment
     */
    public function setEmail(?string $email): Recruitment
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }

    /**
     * @param string|null $streetNumber
     * @return Recruitment
     */
    public function setStreetNumber(?string $streetNumber): Recruitment
    {
        $this->streetNumber = $streetNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    /**
     * @param string|null $streetName
     * @return Recruitment
     */
    public function setStreetName(?string $streetName): Recruitment
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     * @return Recruitment
     */
    public function setCity(?string $city): Recruitment
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    /**
     * @param string|null $postCode
     * @return Recruitment
     */
    public function setPostCode(?string $postCode): Recruitment
    {
        $this->postCode = $postCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     * @return Recruitment
     */
    public function setMessage(?string $message): Recruitment
    {
        $this->message = $message;
        return $this;
    }

}