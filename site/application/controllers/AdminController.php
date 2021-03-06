<?php
/**
 * Controller pour la partie administration du site.
 * @author Benjamin
 *
 */
class AdminController extends FP_Controller_CommonController
{
	/**
	 * (non-PHPdoc)
	 * @see site/library/Zend/Controller/Zend_Controller_Action#init()
	 */
	public function init()
	{
		parent::init();
		$this->_helper->layout->setLayout('admin');

		$config = Zend_Registry::get(FP_Util_Constantes::CONFIG_ID);
		$view = $this->view;
		
		Zend_Dojo::enableView($view);
		$view->dojo()->setLocalPath($config->site->ressources->url . '/js/dojo/dojo/dojo.js')
		-> addStyleSheetModule('dijit.themes.tundra')
		-> setDjConfigOption('parseOnLoad', true)
		-> requireModule("dojo.date.locale")
		-> requireModule("dijit.Tooltip")
		-> enable();

		$view->headScript()->appendFile($config->site->ressources->url . '/js/admin-common.min.js');
		$view->headLink()->appendStylesheet($config->site->ressources->url . '/css/admin.css');

		$auth = Zend_Auth::getInstance();
		$view->login = $auth->getIdentity();
	}

	/**
	 * Action pour la page d'index de l'administration.
	 */
	public function indexAction() {
		if ($this->checkIsLogged()) {
			$serviceChat = FP_Service_ChatServices::getInstance();
			$serviceFa = FP_Service_FaServices::getInstance();

			$this->view->indicNbChatsAdoption = $serviceChat->getNbFiches(FP_Util_Constantes::CHAT_FICHES_A_ADOPTION);
			$this->view->indicNbChatsRes = $serviceChat->getNbFiches(FP_Util_Constantes::CHAT_FICHES_RESERVES);
			$this->view->indicNbFichesAValider = $serviceChat->getNbFiches(FP_Util_Constantes::CHAT_FICHES_A_VALIDER);

			$this->view->indicNbFaActive = $serviceFa->getNbFaWithStatus(FP_Util_Constantes::FA_ACTIVE_STATUT);
			$this->view->indicNbFaDispo = $serviceFa->getNbFaWithStatus(FP_Util_Constantes::FA_DISPONIBLE_STATUT);
			
			$this->view->urlExportChatUrl = $this->view->url(array('controller' => 'chat', 'action' => 'export'));
			$this->view->urlTableauChatUrl = $this->view->url(array('controller' => 'chat', 'action' => 'tableauadoptes'));
			$this->view->urlExportFaUrl = $this->view->url(array('controller' => 'fa', 'action' => 'export'));
			$this->view->urlExportAdoptantUrl = $this->view->url(array('controller' => 'adoptant', 'action' => 'export'));
			$this->view->urlExportContactUrl = $this->view->url(array('action' => 'exportcontacts'));
		}
	}

	/**
	 * Action pour se loguer à l'administration.
	 */
	public function loginAction () {
		$form = new FP_Form_admin_login_Form();
		$request = $this->getRequest();

		if ($request->isPost()) {
			if ($form->isValid($request->getPost())) {
				$authServices = FP_Service_AuthServices::getInstance();
				$errors = $authServices->login($form->login->getValue(), $form->password->getValue());

				if ($errors && $errors != '') {
					$this->view->errors = $errors;
				} else {
					return $this->_helper->redirector('index');
				}
			}
		}
		$this->view->form = $form;
	}

	/**
	 * Logout.
	 */
	public function logoutAction () {
		$auth = Zend_Auth::getInstance();
		if ($auth->hasIdentity()) {
			$auth->clearIdentity();
		}
		return $this->_helper->redirector('login');
	}

	/**
	 * Action pour exporter la liste des contacts du forum.
	 */
	public function exportcontactsAction() {
		if ($this->checkIsLogged()) {
			FP_Service_ExportServices::getInstance()->buildCsvContactsForum();
			exit;
		}
	}
}

