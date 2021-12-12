<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FinanceType[]|\Cake\Collection\CollectionInterface $financeTypes
 */
?>
<div class="financeTypes index content">
    <?= $this->Html->link(__('New Finance Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Finance Types') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifier') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($financeTypes as $financeType): ?>
                <tr>
                    <td><?= $this->Number->format($financeType->id) ?></td>
                    <td><?= h($financeType->name) ?></td>
                    <td><?= $this->Number->format($financeType->creator) ?></td>
                    <td><?= h($financeType->created) ?></td>
                    <td><?= $this->Number->format($financeType->modifier) ?></td>
                    <td><?= h($financeType->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $financeType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $financeType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $financeType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $financeType->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
