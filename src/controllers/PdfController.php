<?php
/**
 * Pdf plugin for Craft CMS 3.x
 *
 * Snapshot or PDF generation from a url or a html page.
 *
 * @link      https://enupal.com
 * @copyright Copyright (c) 2018 Enupal
 */

namespace enupal\pdf\controllers;

use enupal\pdf\Pdf;

use Craft;
use craft\web\Controller;

/**
 * @author    Enupal
 * @package   Pdf
 * @since     1.0.0
 */
class PdfController extends Controller
{

	// Protected Properties
	// =========================================================================

	/**
	 * @var    bool|array Allows anonymous access to this controller's actions.
	 *         The actions must be in 'kebab-case'
	 * @access protected
	 */
	protected $allowAnonymous = ['index', 'do-something'];

	// Public Methods
	// =========================================================================

	/**
	 * @return mixed
	 */
	public function actionIndex()
	{
		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment; filename="file.pdf"');
		$result = Pdf::$app->toPdf->getOutput('https://enupal.com/craft-plugins/');

		if ($result)
		{
			echo $result;
		}

	}

	/**
	 * @return mixed
	 */
	public function actionDoSomething()
	{
		$result = 'Welcome to the PdfController actionDoSomething() method';

		return $result;
	}
}
