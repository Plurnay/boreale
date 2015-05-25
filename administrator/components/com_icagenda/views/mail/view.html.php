<?php
/**
 *------------------------------------------------------------------------------
 *  iCagenda v3 by Jooml!C - Events Management Extension for Joomla! 2.5 / 3.x
 *------------------------------------------------------------------------------
 * @package     com_icagenda
 * @copyright   Copyright (c)2012-2015 Cyril Rezé, Jooml!C - All rights reserved
 *
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 * @author      Cyril Rezé (Lyr!C)
 * @link        http://www.joomlic.com
 *
 * @version     3.5.4 2015-04-02
 * @since       2.0
 *------------------------------------------------------------------------------
*/

// No direct access to this file
defined('_JEXEC') or die();

/**
 * View class Admin - Mail Newsletter - iCagenda
 */
class iCagendaViewMail extends JViewLegacy
{
	protected $state;
	protected $item;
	protected $form;

	/**
	 * Display the view
	 */
	public function display($tpl = null)
	{
		// Joomla 2.5
		if (version_compare(JVERSION, '3.0', 'lt'))
		{
			jimport( 'joomla.environment.request' );

			JHtml::stylesheet('com_icagenda/template.j25.css', false, true);
			JHtml::stylesheet('com_icagenda/icagenda-back.j25.css', false, true);
		}

		$this->state	= $this->get('State');
		$this->item		= $this->get('Item');
		$this->form		= $this->get('Form');

		if ($_POST) $this->get('Mail');

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));

			return false;
		}

		// We don't need toolbar in the modal window.
		if ($this->getLayout() !== 'modal')
		{
			$this->addToolbar();

			if(version_compare(JVERSION, '3.0', 'ge'))
			{
				$this->sidebar = JHtmlSidebar::render();
			}
		}

		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 */
	protected function addToolbar()
	{
		JRequest::setVar('hidemainmenu', true);

		$user		= JFactory::getUser();
		$isNew		= ($this->item->id == 0);

        if (isset($this->item->checked_out))
        {
		    $checkedOut	= !($this->item->checked_out == 0 || $this->item->checked_out == $user->get('id'));
        }
        else
        {
            $checkedOut = false;
        }

		$canDo= iCagendaHelper::getActions();

		// Set Title
		if (version_compare(JVERSION, '3.0', 'lt'))
		{
			JToolBarHelper::title(JText::_('COM_ICAGENDA_TITLE_MAIL'), 'mail.png');
		}
		else
		{
			JToolBarHelper::title('iCagenda <span style="font-size:14px;">- ' . JText::_('COM_ICAGENDA_TITLE_MAIL') . '</span>', 'mail');
		}

		$icTitle = JText::_('COM_ICAGENDA_TITLE_MAIL');

		$document	= JFactory::getDocument();
		$app		= JFactory::getApplication();
		$sitename = $app->getCfg('sitename');
		$title = $app->getCfg('sitename') . ' - ' . JText::_('JADMINISTRATION') . ' - iCagenda: ' . $icTitle;
		$document->setTitle($title);


		if (version_compare(JVERSION, '3.0', 'lt'))
		{
			JToolBarHelper::custom('mail', 'forward.png', 'forward.png', 'ICAGENDA_JTOOLBAR_SEND', false );
		}
		else
		{
			JToolbarHelper::custom('mail', 'envelope.png', 'send_f2.png', 'ICAGENDA_JTOOLBAR_SEND', false);
		}

		JToolBarHelper::cancel('mail.cancel', 'JTOOLBAR_CLOSE');
	}
}
