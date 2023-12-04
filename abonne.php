<?php

class abonne {


    public $name;


    public $password;

    public $email;

    public $numreabonnement;

    public $tel;

    public $ville;

    public function __construct()
    {
    }

	/**
	 * @return mixed
	 */
	public function getName(): ?string 
    {
		return $this->name;
	}
	
	/**
	 * @param mixed $name 
	 * @return self
	 */
	public function setName(string $name): self 
    {
		$this->name = $name;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPassword(): ?string
    {
		return $this->password;
	}
	
	/**
	 * @param mixed $password 
	 * @return self
	 */
	public function setPassword(string $password): self
    {
		$this->password = $password;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmail(): ?string
    {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail(string $email): self {
		$this->email = $email;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNumreabonnement(): ?string
    {
		return $this->numreabonnement;
	}
	
	/**
	 * @param mixed $numreabonnement
	 * @return self
	 */
	public function setNumreabonnement(string $numreabonnement): self 
    {
		$this->sexe = $numreabonnement;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTel(): ?string
    {
		return $this->tel;
	}
	
	/**
	 * @param mixed $tel 
	 * @return self
	 */
	public function setTel(string $tel): self 
    {
		$this->pays = $tel;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getVille(): ?string 
    {
		return $this->domaineActivite;
	}
	
	/**
	 * @param mixed $ville
	 * @return self
	 */
	public function setVille(string $ville): self 
    {
		$this->ville = $ville;
		return $this;
	}

	public function DonneeAbonne($abonne){
		//  $abonne->setId($count);

        if(isset($_POST["nom"])){
            $abonne->setName($_POST["nom"]);
        }else{
            $abonne->setName("");
        }

        if(isset($_POST["mdp"])){
            $abonne->setPassword($_POST["mdp"]);
        }else{
            $abonne->setPassword("");
        }

        if(isset($_POST["Email"])){
            $abonne->setEmail($_POST["Email"]);
        }else{
            $abonne->setEmail("");
        }

        if(isset($_POST["telr"])){
            $abonne->setNumreabonnement($_POST["telr"]);
        }else{
            $abonne->setNumreabonnement("");
        }

        if(isset($_POST["tel"])){
            $abonne->setTel($_POST["tel"]);
        }else{
            $abonne->setTel("");
        }

        if(isset($_POST["ville"])){
            $abonne->setVille($_POST["ville"]);
        }else{
            $abonne->setVille("");
        }
	}
}