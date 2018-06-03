<?php
	namespace App\Domain\TPV;
	use Doctrine\ORM\Mapping as ORM;
	use App\Domain\Club;
	/**
	 * @ORM\Table(name="TPV")
	 */	

	 
  class TPV
  { 
	 /**
		* @ORM\Id
		* @ORM\GeneratedValue
		* @ORM\Column(type="integer")
		*/   
	 private $id;
    /**
     * @ORM\Column(type="float")
     */        
		private $amount;
    /**
     * @ORM\Column(type="integer")
     */        		
	  private $currency;
    /**
     * @ORM\Column(type="integer")
     */        		
		private $order;
    /**
     * @ORM\Column(type="integer")
     */        				
		private $merchantCode;
    /**
     * @ORM\Column(type="integer")
     */        				
		private $terminal;
    /**
     * @ORM\Column(type="string")
     */        				
		private $transactionType;
    /**
     * @ORM\Column(type="string")
     */        				
		private $merchantURL;
    /**
     * @ORM\Column(type="string")
     */        				
		private $urlOK;
    /**
     * @ORM\Column(type="string")
     */        						
		private $urlKO;
    /**
     * @ORM\Column(type="string")
     */        						
		private $nombreLocal;
    /**
     * @ORM\Column(type="string")
     */        						
		private $merchantData;
    /**
     * @ORM\Column(type="string")
     */        						
		private $language;
    /**
     * @ORM\Column(type="string")
     */        						
		private $productDescription;
    /**
     * @ORM\Column(type="integer")
     */        						
		private $responseCode;
    /**
     * @ORM\Column(type="string")
     */        						
		private $responseDescription;

    /**
     * @ORM\Column(type="string")
     */        						
		
		private $key;

		/*
		 * @ORM\ManyToOne(targetEntity="App\Domain\Club", inversed="tpv")     
		 */ 
		private $clubs;

    /**
     * Get the value of amount
     */ 
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @return  self
     */ 
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

	  /**
	   * Get the value of currency
	   */ 
	  public function getCurrency()
	  {
	  	  return $this->currency;
	  }

	  /**
	   * Set the value of currency
	   *
	   * @return  self
	   */ 
	  public function setCurrency($currency)
	  {
	  	  $this->currency = $currency;

	  	  return $this;
	  }

	  /**
	   * Get the value of order
	   */ 
	  public function getOrder()
	  {
	  	  return $this->order;
	  }

	  /**
	   * Set the value of order
	   *
	   * @return  self
	   */ 
	  public function setOrder($order)
	  {
	  	  $this->order = $order;

	  	  return $this;
	  }

	  /**
	   * Get the value of merchantCode
	   */ 
	  public function getMerchantCode()
	  {
	  	  return $this->merchantCode;
	  }

	  /**
	   * Set the value of merchantCode
	   *
	   * @return  self
	   */ 
	  public function setMerchantCode($merchantCode)
	  {
	  	  $this->merchantCode = $merchantCode;

	  	  return $this;
	  }

	  /**
	   * Get the value of terminal
	   */ 
	  public function getTerminal()
	  {
	  	  return $this->terminal;
	  }

	  /**
	   * Set the value of terminal
	   *
	   * @return  self
	   */ 
	  public function setTerminal($terminal)
	  {
	  	  $this->terminal = $terminal;

	  	  return $this;
	  }

	  /**
	   * Get the value of transactionType
	   */ 
	  public function getTransactionType()
	  {
	  	  return $this->transactionType;
	  }

	  /**
	   * Set the value of transactionType
	   *
	   * @return  self
	   */ 
	  public function setTransactionType($transactionType)
	  {
	  	  $this->transactionType = $transactionType;

	  	  return $this;
	  }

	/**
	 * Get the value of merchantURL
	 */ 
	public function getMerchantURL()
	{
		return $this->merchantURL;
	}

	/**
	 * Set the value of merchantURL
	 *
	 * @return  self
	 */ 
	public function setMerchantURL($merchantURL)
	{
		$this->merchantURL = $merchantURL;

		return $this;
	}

	/**
	 * Get the value of urlOK
	 */ 
	public function getUrlOK()
	{
		return $this->urlOK;
	}

	/**
	 * Set the value of urlOK
	 *
	 * @return  self
	 */ 
	public function setUrlOK($urlOK)
	{
		$this->urlOK = $urlOK;

		return $this;
	}

	/**
	 * Get the value of urlKO
	 */ 
	public function getUrlKO()
	{
		return $this->urlKO;
	}

	/**
	 * Set the value of urlKO
	 *
	 * @return  self
	 */ 
	public function setUrlKO($urlKO)
	{
		$this->urlKO = $urlKO;

		return $this;
	}

    /**
     * Get the value of nombreLocal
     */ 
    public function getNombreLocal()
    {
        return $this->nombreLocal;
    }

    /**
     * Set the value of nombreLocal
     *
     * @return  self
     */ 
    public function setNombreLocal($nombreLocal)
    {
        $this->nombreLocal = $nombreLocal;

        return $this;
    }

    /**
     * Get the value of merchantData
     */ 
    public function getMerchantData()
    {
        return $this->merchantData;
    }

    /**
     * Set the value of merchantData
     *
     * @return  self
     */ 
    public function setMerchantData($merchantData)
    {
        $this->merchantData = $merchantData;

        return $this;
    }

	/**
	 * Get the value of language
	 */ 
	public function getLanguage()
	{
		return $this->language;
	}

	/**
	 * Set the value of language
	 *
	 * @return  self
	 */ 
	public function setLanguage($language)
	{
		$this->language = $language;

		return $this;
	}

    /**
     * Get the value of productDescription
     */ 
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * Set the value of productDescription
     *
     * @return  self
     */ 
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;

        return $this;
		}
		
		public function setResponseCode(int $TPVresponseCode)
		{
			$this -> responseCode = $TPVresponseCode;
		}

		public function getResponseCode()
		{
			return $this -> responseCode;
		}

		public function setResponseDescription(string $TPVresponseDescription)
		{
			$this -> responseCode = $TPVresponseDescription;
		}

		public function getResponseDescription()
		{
			return $this -> responseCode;
		}

		/**
		 * Get the value of key
		 */ 
		public function getKey()
		{
				return $this->key;
		}

		/**
		 * Set the value of key
		 *
		 * @return  self
		 */ 
		public function setKey($key)
		{
				$this->key = $key;

				return $this;
		}

		/**
		 * Get the value of clubs
		 */ 
		public function getClubs()
		{
				return $this->clubs;
		}

		/**
		 * Set the value of clubs
		 *
		 * @return  self
		 */ 
		public function setClubs(Club $clubs)
		{
				$this->clubs = $clubs;

				return $this;
		}
  }