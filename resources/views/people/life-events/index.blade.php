<div class="{{ \App\Helpers\LocaleHelper::getDirection() == 'ltr' ? 'fl' : 'fr' }} w-100 pb3 pt1 pl3 pr3">
    <div class="br2 bg-white mb4">
        <life-event-list
            hash="{{ $contact->hashID() }}"
            v-bind:months="{{ $months }}"
            v-bind:days="{{ $days }}"
            v-bind:years="{{ $years }}"
            contact-name="{{ $contact->first_name }}">
        </life-event-list>
    </div>
</div>
