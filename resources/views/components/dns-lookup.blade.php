<div class="w-full relative text-white mx-auto p-4 flex flex-col md:flex-row justify-center items-start gap-4">
    <div class="flex-1 w-full md:sticky top-20 lg:top-5">
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg sticky top-4">
            <div>
                <h2 class="text-xl font-semibold">DNS Lookup</h2>
                <form class="mt-4">
                    <div class="flex space-x-2">
                        <input type="text" name="domain" placeholder="Domain" class="w-full p-2 rounded">
                        <button type="submit" class="bg-blue-600 px-4 py-2 rounded">GO!</button>
                    </div>

                    <div class="mt-4">
                        <label class="block">Query Type:</label>
                        <div class="grid grid-cols-3 gap-2 mt-2">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="query[]" value="ANY" checked
                                    class="form-checkbox text-black">
                                <span>ANY</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="query[]" value="A" class="form-checkbox text-black">
                                <span>A</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="query[]" value="AAAA" class="form-checkbox text-black">
                                <span>AAAA</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="query[]" value="MX" class="form-checkbox text-black">
                                <span>MX</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="query[]" value="NS" class="form-checkbox text-black">
                                <span>NS</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="query[]" value="TXT" class="form-checkbox text-black">
                                <span>TXT</span>
                            </label>
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="block">Nameserver(s) to query:</label>
                        <input type="text" name="nameservers" placeholder="Nameservers to ask"
                            class="w-full p-2 rounded">
                        <p class="text-sm mt-1">If no nameserver is provided, the authoritative server of
                            the domain is queried.</p>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="flex-1 md:p-1 w-full">
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold">About the online DNS lookup tool</h2>
            <p class="mt-2">
                This is a online DNS lookup tool, for resolving domain names. You may know this kind of lookup as
                "nslookup" or "dns dig". The common name varies a bit around the world, even though it works the same: A
                lookup of a specific name in the Domain Name System.
                <br>
                <br>
                The tool performs a recursive lookup by default, starting at one of the root servers and ending with the
                authoritative DNS server of the target domain, ensuring up-to-date and uncached answers. Ideal for
                viewing the actual settings and/or validating DNS changes.
                <br>
                <br>
                With the option to specify a specific name server, a typical resolver lookup can also be performed.
                <br>
                <br>
                The tool supports the most common record types including ANY, A, AAAA, MX, NS, SOA, TXT, and CNAME. It
                performs secondary lookups on any references in the returned DNS records as well.
                <br>
                <br>
                You may take a look on the DNS propagation tool, if you would like to see how +20 DNS resolvers world
                wide respond and performs on DNS lookups.
            </p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg mt-4">
            <h2 class="text-2xl font-semibold">DNS Lookup FAQ</h2>
            <div class="mt-4 space-y-2">
                <details class="bg-gray-700 p-3 rounded-lg">
                    <summary class="cursor-pointer font-semibold">What is DNS?</summary>
                    <p class="mt-2">DNS stands for Domain Name System...</p>
                </details>

                <details class="bg-gray-700 p-3 rounded-lg">
                    <summary class="cursor-pointer font-semibold">What is a DNS record?</summary>
                    <p class="mt-2">A DNS record is a mapping of a domain...</p>
                </details>
            </div>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg mt-4">
            <h2 class="text-2xl font-semibold">Feedback</h2>
            <p class="mt-2">Send feedback to iamroottooltech@gmail.com</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg mt-4">
            <h2 class="text-2xl font-semibold">Changelog</h2>
            <ul class="mt-2">
                <li>📅 2025-02-05: API endpoint for DNS lookup tool made available.</li>
                <li>📅 2025-02-05: Logging for DNS lookups reworked.</li>
            </ul>
        </div>
    </div>
</div>